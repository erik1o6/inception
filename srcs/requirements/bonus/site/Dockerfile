FROM alpine:3.12.0

WORKDIR /app

RUN apk update && \
    apk add --update nodejs npm

COPY ./conf /app

CMD ["node", "run.js"]