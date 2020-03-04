FROM ubuntu:bionic
RUN DEBIAN_FRONTEND=noninteractive && \
apt update && \
apt install -y \
curl \
zip && \
rm -rf /var/lib/apt/lists/*

RUN curl https://releases.hashicorp.com/vault/1.2.3/vault_1.2.3_linux_amd64.zip -o /tmp/vault_1.2.3_linux_amd64.zip && \
unzip -d /usr/local/bin /tmp/vault_1.2.3_linux_amd64.zip
ENV VAULT_ADDR=http://127.0.0.1:8200
EXPOSE 8200
ENTRYPOINT [ "/usr/local/bin/vault" ]
CMD [ "server","-dev" ]