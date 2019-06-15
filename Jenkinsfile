pipeline{
  agent { node { label 'master' } }
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
      steps {
        sh './deploy'
      }
    }
  }
}
