<template>
  <v-app>
    <HelloWorld/>
    <About/>
    <Services/>
    <Middle/>
    <Blog/>
    <Stats/>
    <Team/>
    <Testimonials/>
    <MiddleSection/>
    <Contact/>
    <Map/>
    <Partners/>
    <Footer/>
  </v-app>
</template>

<script>
import HelloWorld from './components/HelloWorld'
import About from './components/About'
import Services from './components/Services'
import Middle from './components/Middle'
import Blog from './components/Blog'
import Stats from './components/Stats'
import Team from './components/Team'
import Testimonials from './components/Testimonials'
import MiddleSection from './components/MiddleSection'
import Contact from './components/Contact'
import Map from './components/Map'
import Partners from './components/Partners'
import Footer from './components/Footer'

export default {
  name: 'App',
  components: {
    HelloWorld,
    About,
    Services,
    Middle,
    Blog,
    Stats,
    Team,
    Testimonials,
    MiddleSection,
    Contact,
    Map,
    Partners,
    Footer
  },
  data () {
    return {
      //
    }
  }
}
</script>
