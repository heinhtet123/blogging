pipeline {
  agent none
  stages {
    stage('Build') {
      agent{
        docker {
          image 'hein71290/phpalpine:latest'
        }
      }
      steps {
        sh 'composer install'
      }
    }

    stage('Deploy') {
      node{
        steps {
          sh './deploy'
        }
      }
    }
  }
}
