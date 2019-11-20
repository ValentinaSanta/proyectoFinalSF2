import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
const URL = "http://localhost:8888/proyectoFinalSF2/Back-end/";

@Injectable({
  providedIn: 'root'
})
export class EquiposService {

  constructor(private http: HttpClient) { }

  /**
   * Listar equipos creados
   */
  public listar(idFacultad?) {
    console.log('idFacultad',idFacultad)
    if(idFacultad){
      return this.http.get(URL + `equipos?idFacultad=${idFacultad}`);// retorna observable
    } else {
      return this.http.get(URL + "equipos");// retorna observable

    }
  }
  /**
   * Listar equipos creados
   */
  public editar() {
    return this.http.get(URL + "equipos/editar");// retorna observable
  }

 /**
  * Crear equipos
  * @param nombre 
  * @param cedula 
  */
  public crear(nombre, especificaciones, cantidad, facultad){
    return this.http.post(URL + "equipos/crear.json", {
      nombre: nombre,
      especificaciones: especificaciones,
      cantidad: cantidad,
      facultad: facultad,
    });
  }

  eliminar(idEquipo){
    return this.http.get(URL + `equipos/eliminar.json?idEquipo=${idEquipo}`);// retorna observable
  }

  getById(idEquipo){
    return this.http.get(URL + `equipos/obtener.json?idEquipo=${idEquipo}`);// retorna observable

  }
  obtenerFacultades(){
    return this.http.get(URL + `profesores/obtenerFacultades.json`);// retorna observable
  }
}
