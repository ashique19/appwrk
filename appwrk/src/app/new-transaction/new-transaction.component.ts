import { Component, OnInit } from '@angular/core';
import { Transaction } from "../transaction";
import { TransactionsService } from '../transactions.service';
import { Location } from '@angular/common';

@Component({
  selector: 'app-new-transaction',
  templateUrl: './new-transaction.component.html',
  styleUrls: ['./new-transaction.component.css']
})
export class NewTransactionComponent implements OnInit {

  transaction : Transaction = {
    transaction_date: new Date('yyyy/MM/dd'),
    description: '',
    credit: 0,
    debit: 0,
    running_balance: 0,

  };

  save(){
    
    this.transactionService.save(this.transaction).subscribe( () => this.location.back() )
  }

  constructor(
    private transactionService: TransactionsService,
    private location: Location
  ) { }

  ngOnInit(): void {
  }

}
