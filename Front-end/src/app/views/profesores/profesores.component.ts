import { Component, OnInit } from '@angular/core';
import { ProfesorService } from '../../services/profesor.service';

@Component({
  selector: 'app-profesores',
  templateUrl: './profesores.component.html',
  styleUrls: ['./profesores.component.scss']
})
export class ProfesoresComponent implements OnInit {

  profesores: any = [
    {nombre: 'pepe', apellido: 'ortiz', cedula:'123123', edad: 13},
    {nombre: 'pepe1', apellido: 'ortiz1', cedula:'123123', edad: 13},
    {nombre: 'pepe2', apellido: 'ortiz2', cedula:'123123', edad: 13},
    {nombre: 'pepe3', apellido: 'ortiz3', cedula:'123123', edad: 13}

  ];

  constructor(private profesorService: ProfesorService) { }

  ngOnInit() {

    this.listar();
  }

  listar(){
    /*this.profesorService.listar().subscribe(res => {
      console.log('Imprimo', res);
      this.profesores = res;
    }, error => {
      console.error(error);
    });*/
  }

  /**
   * Metodo crear profesor
   */
   crear(){
    let nombre = 'Juanito444';
    let cedula = '4444';

    this.profesorService.crear(nombre, cedula).subscribe(res => {
      console.log('Imprimo', res);
    }, error => {
      console.error(error);
    });
  }

  ngAfterViewInit(){    
  }
}
