import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { NewTransactionComponent } from './new-transaction/new-transaction.component';


const routes :Routes = [
  { path: '', component: HomeComponent },
  { path: 'new', component: NewTransactionComponent },
];


@NgModule({
  declarations: [],
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
