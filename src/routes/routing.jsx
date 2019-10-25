import Starter from '../views/starter/starter.jsx';
import Perfil from '../views/perfil/perfil.jsx';

var ThemeRoutes = [
  {
    path: '/dashboard',
    name: 'Dashboard',
    icon: 'ti-loop',
    component: Starter
  },
  {
    path: '/perfil',
    name: 'Perfil',
    icon: 'mdi mdi-comment-processing-outline',
    component: Perfil
  },
  { path: '/', pathTo: '/dashboard', name: 'Dashboard', redirect: true }
];
export default ThemeRoutes;
