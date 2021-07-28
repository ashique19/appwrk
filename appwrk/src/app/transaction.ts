export interface Transaction {
    transaction_date: Date,
    description: string,
    credit: number,
    debit: number,
    running_balance: number,
}
