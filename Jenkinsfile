pipeline {
    agent { docker { image 'php:8.1.11-alpine' } }
    stages {
        stage('build') {
            steps {
                sh 'echo "Hello World"'
                sh 'php --version'
            }
        }
    }
}