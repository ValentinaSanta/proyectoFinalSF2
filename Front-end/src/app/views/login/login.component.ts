import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { FormGroup, FormBuilder, Validators, RequiredValidator } from '@angular/forms';
import { AuthenticationService } from '../../services/authentication.service';

@Component({
  selector: 'app-dashboard',
  templateUrl: 'login.component.html'

})
export class LoginComponent {
  loginForm: FormGroup;
  //servicios - inyeccion de dependencias
  constructor(private router: Router, private formBuilder:FormBuilder,
              private authentication: AuthenticationService){}

  ngOnInit() {
    this.loginForm = this.formBuilder.group({
      userName: ['',Validators.required],
      password: ['',Validators.required],
    });

  }

  login() {
    if(this.loginForm.invalid){
      console.log('Error');
      alert('Formulario invalido');
      return;
    } 
    this.authentication
      .login(this.loginForm.get('userName').value,
            this.loginForm.get('password').value).subscribe((res) => {
              //hubo exito y me llegan datos
              console.log('Resultado', res);
              // validacion para saber que se metio contrasena y usuario valido
              if (Array.isArray(res["loginResult"]) && res["loginResult"].length == 1) {
                var cargo = res["loginResult"][0].CARGO;
              
                if(cargo == 1){
                  this.router.navigate(['profesores']);
                }
                if(cargo == 0){
                  this.router.navigate(['admin']);
                }
              }
              
            }, err => {
              // Ocurrio un error.
              console.log('Error', err);
            });    
  }
}
