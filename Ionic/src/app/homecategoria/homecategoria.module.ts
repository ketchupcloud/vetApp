import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { HomecategoriaPageRoutingModule } from './homecategoria-routing.module';

import { HomecategoriaPage } from './homecategoria.page';
import { ComponentsModule } from '../components.module';


@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    HomecategoriaPageRoutingModule,
    ComponentsModule,
  ],
  declarations: [HomecategoriaPage]
})
export class HomecategoriaPageModule {}
