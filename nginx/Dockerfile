FROM nginx:latest

# COPY ./nginx/certs /etc/nginx/certs/
COPY ./nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf

CMD ["nginx", "-g", "daemon off;"]
