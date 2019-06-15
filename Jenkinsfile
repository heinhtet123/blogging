pipeline{
  agent { node { label 'ci' } }
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
      agent { node { label 'prod' } }
      steps {
        sh './deploy'
      }
    }
  }
}
