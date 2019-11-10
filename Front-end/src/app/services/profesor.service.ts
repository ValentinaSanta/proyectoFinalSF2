import { Injectable} from '@angular/core';
import { HttpClient } from '@angular/common/http';
const URL = "http://localhost:8080/proyectoFinalSF2/Back-end/";

@Injectable()
export class ProfesorService {
  constructor(private http: HttpClient) { }
  
  public listar() {
    return this.http.get(URL + "profesores");// retorna observable
  }

  public crear(nombre, cedula){
    return this.http.post(URL + "profesores/crear", {
      nombre: nombre,
      cedula: cedula
    });
  }
}
