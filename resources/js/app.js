import Dropzone from "dropzone"
Dropzone.autoDiscover =false; 

const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: 'Sube aqui tu imagen',
    acceptedFiles: ".png, .jpg, .jpeg, .gif",
    addRemoveLinks: true,
    dictRemoveFile: 'borrar archivo',
    maxFiles: 1,
    uploadMultiple: false,

    init:function(){
        if(document.querySelector('[name="imagen"]').value.trim() !="/"){
            const imagenPublica = {}
            imagenPublica.size = 1234;
            imagenPublica.name = document.querySelector('[name = "imagen"]').value;

            this.options.addedfile.call(this,imagenPublica);
            this.options.thumbnail.call(this, imagenPublica, `/upload/${imagenPublica.name}`);

            imagenPublica.previewElement.classList.add("dz-sucess", "dz-complete");
        }
    }
});

dropzone.on("success", function(file, response){
document.querySelector('[name = "imagen"]').value = response.imagen;
})

dropzone.on("removedfile", function(file, response){
document.querySelector('[name = "imagen"]').value = '/';
})

