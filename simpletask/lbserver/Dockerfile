FROM nginx
#ADD nginx.conf /etc/nginx/conf.d/default.conf
COPY nginx.conf /etc/nginx/nginx.conf

EXPOSE 8081

# Start Nginx when the container has provisioned.
CMD ["nginx", "-g", "daemon off;"]