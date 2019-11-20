import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { EquiposInitComponent } from './equipos-init.component';

describe('EquiposInitComponent', () => {
  let component: EquiposInitComponent;
  let fixture: ComponentFixture<EquiposInitComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ EquiposInitComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(EquiposInitComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
