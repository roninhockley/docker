FROM ubuntu:trusty AS build

RUN apt-get update && \
apt-get install -y \
make \
curl \
git

#Install Golang
RUN curl https://dl.google.com/go/go1.12.2.linux-amd64.tar.gz | tar -xz -C /tmp && \
    cp /tmp/go/bin/go /usr/local/bin && \
    mv /tmp/go /usr/local
RUN git clone https://github.com/hashicorp/consul /consul 
WORKDIR /consul
RUN make tools && \
make dev

FROM scratch
COPY --from=build /consul /consul
EXPOSE 8500
ENTRYPOINT [ "/consul/bin/consul"]
CMD ["agent", "-dev", "-client", "0.0.0.0"]