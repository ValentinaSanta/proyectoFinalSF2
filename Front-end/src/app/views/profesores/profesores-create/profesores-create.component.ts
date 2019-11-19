import { Component, OnInit } from '@angular/core';
import { ProfesorService } from '../../../services/profesor.service';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-profesores-create',
  templateUrl: './profesores-create.component.html',
  styleUrls: ['./profesores-create.component.scss']
})
export class ProfesoresCreateComponent implements OnInit {

  profesoresForm: FormGroup;
  idPersona;
  constructor(private profesorService: ProfesorService,
    private formBuilder: FormBuilder, private route: ActivatedRoute) { }

  ngOnInit() {
    this.idPersona = this.route.snapshot.paramMap.get("id");
    console.log(this.idPersona)
    this.profesoresForm = this.formBuilder.group({
      nombre: ['', Validators.required],
      apellido: ['', Validators.required],
      telefono: ['', Validators.required],
      cedula: ['', Validators.required],
      clave: ['', Validators.required],
      nombreUsuario: ['', Validators.required]
    });
    if (this.idPersona) {
      // logica para obtener a una persona de la bd 
      // le digo al servicio que mde traiga elprofesor on el id indicado
      this.profesorService.getById(this.idPersona).subscribe((res: any) => {
        console.log('USUARIO', res);
        if(res.success === true){
          this.profesoresForm.patchValue({
            nombre: res.result.NOMBRE,
            apellido: res.result.APELLIDO,
            cedula: res.result.IDUSUARIO,
            telefono: res.result.TELEFONO,
            clave: res.result.CLAVE,
            nombreUsuario: res.result.NOMBREUSUARIO
          });
        }
      });
    }
  }
  /**
   * Metodo crear profesor
   */
  crear() {
    if (this.profesoresForm.valid) {
      this.profesorService.crear(this.profesoresForm.get('nombre').value,
        this.profesoresForm.get('apellido').value,
        this.profesoresForm.get('telefono').value,
        this.profesoresForm.get('cedula').value,
        this.profesoresForm.get('clave').value,
        this.profesoresForm.get('nombreUsuario').value).subscribe(res => {
          console.log('Imprimo', res);
          window.alert("guardado correctamente");
          this.profesoresForm.patchValue({
            nombre: '',
            apellido: '',
            cedula: '',
            telefono: '',
            clave: '',
            nombreUsuario: ''
          });
        }, error => {
          console.error(error);
        });
    }

  }
}
