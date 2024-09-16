pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                git 'https://github.com/Deep2553/CampusPlacementManagementSystem_Website.git'
                sh 'composer install'
                sh 'cp .env.example .env'
                sh 'php artisan key:generate'
            }
        }
        stage('Test') {
            steps {
                sh 'composer install'
            }
        }
    }
}

