import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { VencedorasComponent } from './vencedoras.component';

describe('VencedorasComponent', () => {
  let component: VencedorasComponent;
  let fixture: ComponentFixture<VencedorasComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ VencedorasComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(VencedorasComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
