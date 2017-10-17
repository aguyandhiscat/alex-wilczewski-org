module.exports = function(grunt) {
    loadTasksForGrunt(grunt);
    registerTasksForGrunt(grunt);

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            all: {
                src: [
                    "frontend/banner.css",
                    "vendors/normalize.css_7.0.0/normalize.css",
                    "frontend/*.css",
                    "tmp/compiledSass.css"
                ],
                dest: "tmp/joined.css"
            },
            copyToProd: {
                src: ["tmp/joined.css"],
                dest: "wp-content/themes/alexs-site/style.css"
            }
        },
        cssmin: {
            prod: {

            }
        },
        sass: {
            all: {
                src: [
                    "frontend/*.scss"
                ],
                dest: "tmp/compiledSass.css"
            }
        },
        watch: {
            dev: {
                options: {
                    atBegin: true
                },
                files: [
                    "Gruntfile.js",
                    "frontend/**/*",
                    "vendors/**/*"
                ],
                tasks: [
                    "sass:all",
                    "concat:all",
                    "concat:copyToProd"
                ]
            },
            prod: {

            }
        }
    });
};

function loadTasksForGrunt(grunt) {
    var tasks = [
        "grunt-contrib-concat",
        "grunt-contrib-cssmin",
        "grunt-contrib-watch",
        "grunt-sass"
    ];
    loadArrayOfTasks(grunt, tasks);
}

function loadArrayOfTasks(grunt, tasks) {
    tasks.forEach(function (task) {
        grunt.loadNpmTasks(task);
    });
}

function registerTasksForGrunt(grunt) {
    grunt.registerTask("dev", ["watch:dev"]);
}
