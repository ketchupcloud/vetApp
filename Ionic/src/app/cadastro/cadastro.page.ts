import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, FormBuilder, Validators } from '@angular/forms';
import { UsuarioService } from '../services/usuario.service';

import { Router } from '@angular/router';

@Component({
  selector: 'app-cadastro',
  templateUrl: './cadastro.page.html',
  styleUrls: ['./cadastro.page.scss'],
})
export class CadastroPage implements OnInit {
//AULA!!
	registerForm: FormGroup;

	constructor(public router: Router, public formbuilder: FormBuilder, public usuarioService: UsuarioService) { 
		this.registerForm = this.formbuilder.group({
			name: [null, [Validators.required, Validators.minLength(3)]],
			email: [null, [Validators.required, Validators.email]],
			phone: [null, [Validators.required]],
			birthdate: [null, [Validators.required]]
		});
	}
	

	submitForm(form) {
		this.usuarioService.postClient(form.value).subscribe( (res) => {
			this.router.navigateByUrl('../cadastro2/');//MUDANCA RECENTE N TESTADA
		} );
		console.log(form);
		console.log(form.value);
	}

  /* constructor(formBuilder) { }
	this.validations_form = this.formBuilder.group({
		nome: new FormControl('', Validators.required),
		email: new FormControl('', Validators.compose([
			Validators.required,
			Validators.pattern('^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$')
		]))
	}); */
	
  ngOnInit() {
  }

}
