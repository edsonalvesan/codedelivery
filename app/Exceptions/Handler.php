<?php

namespace CodeDelivery\Exceptions;

use Barryvdh\Cors\Stack\CorsService;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use League\OAuth2\Server\Exception\OAuthException;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{

    /**
     * @var CorsService
     */
    private $corsService;

    public function __construct(LoggerInterface $log, CorsService $corsService)
    {
        parent::__construct($log);
        $this->corsService = $corsService;
    }


    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
        return parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        if ($e instanceof OAuthException){
            $response = response()->json([
                'error' => $e->errorType,
                'error_description' => $e->getMessage()
            ], $e->httpStatusCode, $e->getHttpHeaders());
            return $this->corsService->addActualRequestHeaders($response, $request);
        }

        return parent::render($request, $e);
    }
}
