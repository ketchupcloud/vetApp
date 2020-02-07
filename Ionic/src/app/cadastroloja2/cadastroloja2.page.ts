import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, FormBuilder, Validators } from '@angular/forms';

@Component({
  selector: 'app-cadastroloja2',
  templateUrl: './cadastroloja2.page.html',
  styleUrls: ['./cadastroloja2.page.scss'],
})
export class Cadastroloja2Page implements OnInit {

  registerForm: FormGroup;

  constructor(public formbuilder: FormBuilder) {
    this.registerForm = this.formbuilder.group({
      address: [null,[Validators.required, Validators.minLength(2)]],
      password: [null,[Validators.required, Validators.minLength(6)]],
      passwordVerify: [null,[Validators.required,Validators.minLength(6)]]   
    });
   }

   submitForm(form){
     console.log(form);
     console.log(form.value);
   }

  ngOnInit() {
  }

}
