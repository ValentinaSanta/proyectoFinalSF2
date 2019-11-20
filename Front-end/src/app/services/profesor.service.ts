import { Injectable} from '@angular/core';
import { HttpClient } from '@angular/common/http';
const URL = "http://localhost:8888/proyectoFinalSF2/Back-end/";

@Injectable()
export class ProfesorService {
  constructor(private http: HttpClient) { }
  /**
   * Listar profesores creados
   */
  public listar() {
    return this.http.get(URL + "profesores");// retorna observable
  }
  /**
   * Listar profesores creados
   */
  public editar() {
    return this.http.get(URL + "profesores/editar");// retorna observable
  }

 /**
  * Crear profesores
  * @param nombre 
  * @param cedula 
  */
  public crear(nombre, apellido, telefono, idUsuario, clave, nombreUsuario){
    return this.http.post(URL + "profesores/crear.json", {
      nombre: nombre,
      telefono: telefono,
      apellido: apellido,
      idUsuario: idUsuario,
      clave: clave,
      nombreUsuario: nombreUsuario,
    });
  }

  eliminar(idUsuario){
    return this.http.get(URL + `profesores/eliminar.json?idUsuario=${idUsuario}`);// retorna observable
  }


  getById(idUsuario){
    return this.http.get(URL + `profesores/obtener.json?idUsuario=${idUsuario}`);// retorna observable

  }
}
