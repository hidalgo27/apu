require('./bootstrap');
import { createApp } from 'vue'
import ExampleComponent from "./components/ExampleComponent";
const app = createApp({
    components: {
        ExampleComponent
    }
})
app.mount('#app')
