import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

// Import Containers
import { DefaultLayoutComponent } from './containers';

import { P404Component } from './views/error/404.component';
import { P500Component } from './views/error/500.component';
import { LoginComponent } from './views/login/login.component';
import { RegisterComponent } from './views/register/register.component';
import { ProfesoresComponent } from './views/profesores/profesores.component';
import { ProfesoresCreateComponent } from './views/profesores/profesores-create/profesores-create.component';
import { EquiposComponent } from './views/equipos/equipos.component';
import { EquiposInitComponent } from './views/equipos/equipos-init/equipos-init.component';

export const routes: Routes = [
  {
    path: '',
    redirectTo: 'login',
    pathMatch: 'full',
  },
  {
    path: '404',
    component: P404Component,
    data: {
      title: 'Page 404'
    }
  },
  {
    path: '500',
    component: P500Component,
    data: {
      title: 'Page 500'
    }
  },
  {
    path: 'login',
    component: LoginComponent,
    data: {
      title: 'Login Page'
    }
  },
  {
    path: 'register',
    component: RegisterComponent,
    data: {
      title: 'Register Page'
    }
  },
  {
    path: '',
    component: DefaultLayoutComponent,
    data: {
      title: 'Home'
    },
    children: [
      {
        path: 'equipos',
        component: EquiposComponent,
        data: {
          title: 'Equipos Page'
        }
      },
      {
        path: 'equipos/edit/:id',
        component: EquiposInitComponent,
        data: {
          title: 'Equipos Page'
        }
      },
      {
        path: 'equipos/create',
        component: EquiposInitComponent,
        data: {
          title: 'Creacion Equipos'
        }
      },
      {
        path: 'profesores',
        component: ProfesoresComponent,
        data: {
          title: 'Profesores Page'
        }
      },
      {
        path: 'profesores/edit/:id',
        component: ProfesoresCreateComponent,
        data: {
          title: 'Creacion Profesores'
        }
      },
      {
        path: 'profesores/create',
        component: ProfesoresCreateComponent,
        data: {
          title: 'Creacion Profesores'
        }
      },
      {
        path: 'profesores/edit',
        component: ProfesoresCreateComponent,
        data: {
          title: 'Creacion Profesores'
        }
      },
      {
        path: 'base',
        loadChildren: () => import('./views/base/base.module').then(m => m.BaseModule)
      },
      {
        path: 'buttons',
        loadChildren: () => import('./views/buttons/buttons.module').then(m => m.ButtonsModule)
      },
      {
        path: 'charts',
        loadChildren: () => import('./views/chartjs/chartjs.module').then(m => m.ChartJSModule)
      },
      {
        path: 'dashboard',
        loadChildren: () => import('./views/dashboard/dashboard.module').then(m => m.DashboardModule)
      },
      {
        path: 'icons',
        loadChildren: () => import('./views/icons/icons.module').then(m => m.IconsModule)
      },
      {
        path: 'notifications',
        loadChildren: () => import('./views/notifications/notifications.module').then(m => m.NotificationsModule)
      },
      {
        path: 'theme',
        loadChildren: () => import('./views/theme/theme.module').then(m => m.ThemeModule)
      },
      {
        path: 'widgets',
        loadChildren: () => import('./views/widgets/widgets.module').then(m => m.WidgetsModule)
      }
    ]
  },
  { path: '**', component: P404Component }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
