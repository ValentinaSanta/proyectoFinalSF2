import { Component, OnInit } from '@angular/core';
import { ProfesorService } from '../../services/profesor.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-profesores',
  templateUrl: './profesores.component.html',
  styleUrls: ['./profesores.component.scss']
})
export class ProfesoresComponent implements OnInit {

  profesores: any;

  constructor(private profesorService: ProfesorService,
              private router: Router) { }

  ngOnInit() {
    this.listar();
  }

  listar() {
    this.profesorService.listar().subscribe(res => {
      console.log('Imprimo', res);
      if(res['success'] === true) {
        this.profesores = res['result'];
      }      
    }, error => {
      console.error(error);
    });
  }
  eliminar(id) {
    this.profesorService.eliminar(id).subscribe(res => {
      console.log('Imprimo', res);
      if(res['success'] === true) {
        window.alert("Texto a mostrar");
        this.listar();
      }      
    }, error => {
      console.error(error);
    });
  }

  goToEditar(id){
    this.router.navigate(['profesores/edit', id]);
  }
}
