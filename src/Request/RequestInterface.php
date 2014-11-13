<?php

namespace Air\HTTP\Request;

interface RequestInterface
{
    const METHOD_CONNECT = 'CONNECT';
    const METHOD_DELETE = 'DELETE';
    const METHOD_GET = 'GET';
    const METHOD_HEAD = 'HEAD';
    const METHOD_OPTIONS = 'OPTIONS';
    const METHOD_PATCH = 'PATCH';
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const METHOD_TRACE = 'TRACE';


    /**
     * @return string The request method.
     */
    public function getMethod();


    /**
     * @return string The URI.
     */
    public function getUri();


    /**
     * @return string The URI path.
     */
    public function getUriPath();


    /**
     * @return array The query parameters.
     */
    public function getQueryParameters();


    /**
     * @return array Request POST data.
     */
    public function getPostData();


    /**
     * Add post data to the request.
     *
     * @param array $data An array of data.
     */
    public function addPostData(array $data);
}
