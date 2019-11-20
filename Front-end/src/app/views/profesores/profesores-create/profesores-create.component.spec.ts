import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ProfesoresCreateComponent } from './profesores-create.component';

describe('ProfesoresCreateComponent', () => {
  let component: ProfesoresCreateComponent;
  let fixture: ComponentFixture<ProfesoresCreateComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ProfesoresCreateComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ProfesoresCreateComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
