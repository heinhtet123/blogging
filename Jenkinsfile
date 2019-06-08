pipeline {
  agent {
    docker {
      image 'hein71290/phpalpine'
    }
  }
  stages {
    stage('Build') {
      steps {
        sh 'composer install'
      }
    }
  }
}
