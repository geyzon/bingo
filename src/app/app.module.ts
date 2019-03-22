import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { MenuComponent } from './menu/menu.component';
import { SorteadorComponent } from './sorteador/sorteador.component';
import { TabuleiroComponent } from './tabuleiro/tabuleiro.component';
import { PlacarComponent } from './placar/placar.component';
import { VencedorasComponent } from './vencedoras/vencedoras.component';

@NgModule({
  declarations: [
    AppComponent,
    MenuComponent,
    SorteadorComponent,
    TabuleiroComponent,
    PlacarComponent,
    VencedorasComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
