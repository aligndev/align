import '../OBJLoader.js';
import { GLTFLoader } from "https://cdn.jsdelivr.net/npm/three@0.121.1/examples/jsm/loaders/GLTFLoader.js";

export default class iphoneX {

    constructor() {
        const loader = new GLTFLoader();
        loader.load('/App/model/scene.gltf', gltf => {
            // console.log(gltf.scene.children[0])
            this.geom = gltf.scene.children[0];

            // scene.add(gltf.scene);
        },
            // function (error) {
            //     console.log('Error: ' + error)
            // }
        )


    }
}