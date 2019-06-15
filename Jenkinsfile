pipeline {
  agent none
  stages {
    stage('Build') {
      docker {
        image 'hein71290/phpalpine:latest'
      }
      steps {
        sh 'composer install'
      }
    }

    stage('Deploy') {
      steps {
        sh './deploy'
      }
    }
  }
}
