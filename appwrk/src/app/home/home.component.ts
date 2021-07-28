import { Component, OnInit } from '@angular/core';
import { Transaction } from '../transaction';
import { TransactionsService } from '../transactions.service';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  transactions ?: Transaction[];

  get():void{
    this.transactionService.get().subscribe( transactions => this.transactions = transactions );
  }

  constructor(
    private transactionService: TransactionsService
  ) { }

  ngOnInit(): void {
    this.get();
  }

}
