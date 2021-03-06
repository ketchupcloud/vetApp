import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { Location } from '@angular/common';
import { LojaService } from '../services/loja.service';

@Component({
  selector: 'app-cadastroloja',
  templateUrl: './cadastroloja.page.html',
  styleUrls: ['./cadastroloja.page.scss'],
})
export class CadastrolojaPage implements OnInit {

  registerStoreForm: FormGroup;
  verificationError: boolean;


  constructor(public formbuilder: FormBuilder, private _location: Location, public lojaService: LojaService, public router: Router ) {
    this.registerStoreForm = this.formbuilder.group({
      name: [null, [Validators.required, Validators.minLength(2)]],
      email: [null,[Validators.required,Validators.email]],
      cnpj: [null, [Validators.required,Validators.minLength(1)]], //FIX
      phone: [null, [Validators.required]],
      delivery: [null, [Validators.required]],
      address: [null,[Validators.required, Validators.minLength(2)]],
      password: [null,[Validators.required, Validators.minLength(5)]],
      passwordVerify: [null,[Validators.required,Validators.minLength(5)]]
    });
   }

   passwordVerification(form){
    if(form.value.password != form.value.passwordVerify){
      this.verificationError = true;
    } else{
      this.verificationError = false;
    }
  }

  backButton(){
    this._location.back();
  }

  RegisterStore( registerStoreForm ) {

  	if ( registerStoreForm.status == "VALID" ) {

      if(registerStoreForm.value.delivery=="sim"){
        registerStoreForm.value.delivery=true;
      }else{
        registerStoreForm.value.delivery=false;
      }

    registerStoreForm.value.phone = registerStoreForm.value.phone.replace(" ","");
    console.log(registerStoreForm.value)


  		this.lojaService.registerStore( registerStoreForm.value ).subscribe(
  			(res) => {
          console.log( res );
  				this.router.navigate(['/tabs/home']);
  			}
  		);
  	}
  }

  ngOnInit() {
  }

}
