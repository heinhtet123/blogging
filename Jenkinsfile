pipeline {
  agent {
    docker {
      image 'hitalos/laravel'
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