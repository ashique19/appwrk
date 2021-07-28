import { Injectable } from '@angular/core';
import { Transaction } from './transaction';
import { Observable, of } from 'rxjs';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { catchError, map, tap } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})
export class TransactionsService {

  httpOptions = {
    headers: new HttpHeaders({ 'Content-Type': 'application/json' })
  };

  url(url: string): string{
    return 'http://localhost/api'+url;
  }

  get(): Observable<Transaction[]>{
    return this.http.get<Transaction[]>( this.url('/transactions') );
  }

  save(transaction: Transaction): Observable<Transaction>{
    return this.http.post<Transaction>( this.url('/transactions'), transaction, this.httpOptions );
  }

  /**
   * Handle Http operation that failed.
   * Let the app continue.
   * @param operation - name of the operation that failed
   * @param result - optional value to return as the observable result
   */
  private handleError<T>(operation = 'operation', result?: T) {
    return (error: any): Observable<T> => {

      // TODO: send the error to remote logging infrastructure
      console.error(error); // log to console instead

      // Let the app keep running by returning an empty result.
      return of(result as T);
    };
  }

  

  constructor(
    private http: HttpClient
  ) { }
}
