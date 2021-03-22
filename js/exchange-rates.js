import { tracked } from '@glimmer/tracking';
import moment from 'moment';

import { parseMoney } from 'seeds-toolkit/utils/currency';

function parseRow({ date, seeds_usd }) {
  return {
    date: moment.utc(date).toDate(),
    usd: parseMoney(seeds_usd).quantity
  };
}

const CYCLE_LENGTH = 29;

export default class ExchangeRates {
  @tracked current;
  @tracked history = [];

  constructor(current, history = []) {
    Object.assign(this, {
      current,
      history
    });
  }

  static fromRows(tableRows = []) {
    const mappedTableRows = tableRows.map(parseRow);
    mappedTableRows.sort(({ date: a }, { date: b }) => b - a);
    const [currentRow, ...historyRows] = mappedTableRows;
    return new this(currentRow, historyRows);
  }

  get historyForCurrentCycle() {
    const { history } = this;
    const earliestDate = moment().subtract(CYCLE_LENGTH + 1, 'days').startOf('day');
    return history.filter(function ({ date }){
      return moment(date).isSameOrAfter(earliestDate);
    });
  }

  get historyForPreviousCycles() {
    const { history } = this;
    const earliestDate = moment().subtract(CYCLE_LENGTH + 1, 'days').startOf('day');
    return history.filter(function ({ date }){
      return moment(date).isBefore(earliestDate);
    });
  }

  get earliestCycleRate() {
    const {
      historyForCurrentCycle  = [],
      historyForPreviousCycles = []
    } = this;
    return historyForCurrentCycle.length ? historyForCurrentCycle[historyForCurrentCycle.length - 1] : historyForPreviousCycles[0];
  }

  get growth() {
    const {
      current: { usd: currentRate } = {},
      earliestCycleRate: { usd: previousRate } = {}
    } = this;
    const growth = 100 * (((1 / currentRate) - (1 / previousRate)) / (1 / previousRate));
    return Math.round((growth + Number.EPSILON) * 100) / 100;
  }

  get growthIsPositive() {
    return this.growth >= 0;
  }

  get hasGrowthData() {
    return this.history.length > 0;
  }
}
