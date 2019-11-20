import { Component, OnInit } from '@angular/core';
import { EquiposService } from '../../services/equipos.service';
import { Router } from '@angular/router';
import { NgStyle } from '@angular/common';

@Component({
  selector: 'app-equipos',
  templateUrl: './equipos.component.html',
  styleUrls: ['./equipos.component.scss']
})
export class EquiposComponent implements OnInit {

  equipos: any;
  facultades: any;
  selectedFacultad:any;
  constructor(private equiposService: EquiposService,
              private router: Router) { }
  ngOnInit() {
    this.equiposService.obtenerFacultades().subscribe((res: any) => {
      console.log('Facultades', res);
      if (res.success && res.success === true){
        this.facultades = res.result;
      }
    });
    this.listar();
  }
  filtrar(event){
    console.log("debo filtrar");
    this.equiposService.listar(this.selectedFacultad).subscribe(res => {
      console.log('Imprimo', res);
      if(res['success'] === true) {
        this.equipos = res['result'];
      }      
    }, error => {
      console.error(error);
    });
  }
  listar() {
    this.equiposService.listar().subscribe(res => {
      console.log('Imprimo', res);
      if(res['success'] === true) {
        this.equipos = res['result'];
      }      
    }, error => {
      console.error(error);
    });
  }
  eliminar(id) {
    this.equiposService.eliminar(id).subscribe(res => {
      console.log('Imprimo', res);
      if(res['success'] === true) {
        window.alert("Eliminado");
        this.listar();
      }      
    }, error => {
      console.error(error);
    });
  }

  goToEditar(id){
    this.router.navigate(['equipos/edit', id]);
  }
}
