    window.string_to_slug = function(str, querySelector){
        str = str.replace(/^\s+|\s+$/g, ''); // quitar espacios al inicio/fin
        str = str.toLowerCase();

        var from = "àáâäæãåāèéêëēėęîïíīįìôöòóõœøōûüùúūñç·/_,:;";
        var to   = "aaaaaaaaaeeeeeeeiiiiiioooooooouuuuunc------";

        for (var i = 0, l = from.length; i < l; i++) {
            str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
        }

        str = str.replace(/[^a-z0-9 -]/g, '') // quitar caracteres no válidos
                 .replace(/\s+/g, '-')        // reemplazar espacios por guiones
                 .replace(/-+/g, '-');        // evitar guiones repetidos

        document.querySelector(querySelector).value = str;
    }

