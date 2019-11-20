import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { ActivatedRoute } from '@angular/router';
import { EquiposService } from '../../../services/equipos.service';

@Component({
  selector: 'app-equipos-init',
  templateUrl: './equipos-init.component.html',
  styleUrls: ['./equipos-init.component.scss']
})
export class EquiposInitComponent implements OnInit {

  equiposForm: FormGroup;
  idEquipo;
  facultades: any;
  constructor(private equipoService: EquiposService,
    private formBuilder: FormBuilder, private route: ActivatedRoute) { }

  ngOnInit() {
    this.equipoService.obtenerFacultades().subscribe((res: any) => {
      console.log('Facultades', res);
      if (res.success && res.success === true){
        this.facultades = res.result;
      }
    });
    this.idEquipo = this.route.snapshot.paramMap.get("id");
    console.log(this.idEquipo)
    this.equiposForm = this.formBuilder.group({
      nombre: ['', Validators.required],
      especificaciones: ['', Validators.required],
      cantidad: ['', Validators.required],
      facultad: ['', Validators.required],
    });
    if (this.idEquipo) {
      // logica para obtener a una persona de la bd 
      // le digo al servicio que mde traiga elprofesor on el id indicado
      this.equipoService.getById(this.idEquipo).subscribe((res: any) => {
        console.log('equipo', res);
        if(res.success === true){
          this.equiposForm.patchValue({
            nombre: res.result.NOMBRE,
            especificaciones: res.result.ESPECIFICACIONES,
            cantidad: res.result.CANTIDAD,
            facultad: res.result.FACULTAD,
          });
        }
      });
    }
  }
  /**
   * Metodo crear profesor
   */
  crear() {
    if (this.equiposForm.valid) {
      this.equipoService.crear(
        this.equiposForm.get('nombre').value,
        this.equiposForm.get('especificaciones').value,
        this.equiposForm.get('cantidad').value,
        this.equiposForm.get('facultad').value).subscribe(res => {
          console.log('Imprimo', res);
          window.alert("guardado correctamente");
          this.equiposForm.patchValue({
            nombre: '',
            especificaciones: '',
            cantidad: '',
            facultad: '',
          });
        }, error => {
          console.error(error);
        });
    }

  }

}
