import { Component, HostBinding, OnInit }                  from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';

import { AuthService }                        from '../../services/auth.service';

@Component({
    selector: 'app-login',
    templateUrl: './login.component.html',
    styleUrls: [ './login.component.scss' ]
})
export class LoginComponent implements OnInit {
    public loginForm:any;
    public email:string             = '';
    public pass:string              = '';
    public isLoginFocus:boolean     = false;
    public isPassFocus:boolean      = false;
    public isLoginError:boolean     = false;
    public isPassError:boolean      = false;
    public banned:boolean           = false;

    public loginErrorMessage:string = '';
    public passErrorMessage:string  = '';
    public responseError:string     = '';

    @HostBinding( 'class.form' ) true;
    @HostBinding( 'class.form__error' ) isResponseErros;

  constructor(
      public fb:FormBuilder,
      public authService:AuthService
  ) { }

  checkInput() {
    let email = this.loginForm.get('email');
    let pass = this.loginForm.get('pass');

    this.isLoginError = false;
    this.isPassError = false;
    this.loginErrorMessage = '';
    this.passErrorMessage = '';

    if(email.hasError('required') && email.touched) {
        this.isLoginError = true;
        this.loginErrorMessage = '1';
    }

    if(email.hasError('email') && email.value) {
        this.isLoginError = true;
        this.loginErrorMessage = '2';
    }

    if(pass.hasError('required') && pass.touched) {
        this.isPassError = true;
        this.passErrorMessage = '3';
    }

    if(pass.hasError('minlength')) {
        this.isPassError = true;
        this.passErrorMessage = '4';
    }
  }

  formSubmit( email:string, pass:string, valid:boolean):void {
    console.log(email, pass, valid);
    //if(!valid) return;
      this.authService.login( email, pass )
        .then(
            (d) => {
                this.isResponseErros = false;
            },(err) => {
                this.isResponseErros = true;

                if (err.json().errorCode === 'banned') {
                  this.banned = true;
                  this.responseError = err.json().message;
                }
                if (err.json().errorCode === 'badCredentials') {
                  this.responseError = err.json().message;
                }
            }
        );
  }
  ngOnInit() {
    this.loginForm = this.fb.group({
          email: [this.email, [ Validators.required, Validators.email ]],
          pass: [this.pass, [ Validators.required, Validators.minLength(6) ]]
      });
  }

}
