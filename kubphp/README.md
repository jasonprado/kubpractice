# PHP Kubernetes Exploration
`kubphp/` contains:
* A simple PHP page
* Dockerfile for a PHP-FPM server
* Kubernetes definitions for a PHP/nginx deployment
* docker-compose.yaml for local development

# Deploy PHP hello world to GCloud
* Shortcut: Install VSCode containers extension `vscode:extension/ms-vscode-remote.remote-containers`. It contains kubectl, gcloud, etc
* Prerequisite: Make the following directories on your host:
  * `~/.kube`
  * `~/.aws`
  * `~/.config/gcloud`
* Otherwise, install kubectl and gcloud SDK on your local machine
* Read this tutorial: https://cloud.google.com/kubernetes-engine/docs/tutorials/hello-app
* And this one: https://matthewpalmer.net/kubernetes-app-developer/articles/php-fpm-nginx-kubernetes.html
* `docker build . -f deploy/Dockerfile -t gcr.io/kubpractice/kubphp:1.0.1`
