import Vue from 'vue'
import Router from 'vue-router'
import Home from './components/page/Home'
import Skill from './components/page/Skill'
import ActualResults from './components/page/ActualResults'
import Development from './components/page/Development'
import Contact from './components/page/Contact'

Vue.use(Router)

export default new Router({
    mode: 'history', // SPAのURLにはhistoryモード(#ハッシュが付かないタイプを使います)
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home // URL「/」に対してHomeコンポーネントを使うという意味です
        },
        {
            path: '/skill',
            name: 'skill',
            component: Skill
        },
        {
            path: '/actual_results',
            name: 'actual_results',
            component: ActualResults
        },
        {
            path: '/development',
            name: 'development',
            component: Development
        },
        {
            path: '/contact',
            name: 'contact',
            component: Contact
        },
    ]
})
