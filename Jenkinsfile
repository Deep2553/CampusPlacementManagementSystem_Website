#!/usr/bin/env groovy

pipeline {

    agent {
        docker {
            image 'php'
            args '-u root'
        }
    }

    stages {
        stage('Build') {
            steps {
                echo 'Building...'
                sh 'php install'
            }
        }
        stage('Test') {
            steps {
                echo 'Testing...'
                sh 'php test'
            }
        }
    }
}
