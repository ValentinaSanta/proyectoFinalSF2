import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
const URL = "http://localhost:8080/proyectoFinalSF2/Back-end/";

@Injectable({
  providedIn: 'root'
})
export class AuthenticationService {

  constructor(private http: HttpClient) { }

  login(userName, password){
    return this.http.post(URL + "authentication", {
      userName: userName,
      password: password      
    });
  }
}
