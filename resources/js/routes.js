import Vue from 'vue';
import Router from 'vue-router';

import Home from './components/pages/home';
import About from './components/pages/about';
import Dashboard from './components/pages/dashboard';
import Project from './components/pages/project';
import Team from './components/pages/team';

Vue.use(Router);

export default new Router({
    routes: [
      { path: '/', name: 'home', component: Home },
      { path: '/about', name: 'about', component: About },
      { path: '/dashboard', name: 'dashboard', component: Dashboard,
        children: [
          { path: '/projects', name: 'projects', component: Project },
          { path: '/team', name: 'team', component: Team },
        ]
      },
     
    ],
    mode:'history'
  },
  
  )