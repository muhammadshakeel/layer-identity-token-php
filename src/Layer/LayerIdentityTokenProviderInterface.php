<?php

namespace Layer;

/**
 * Interface LayerIdentityTokenProviderInterface.
 */
interface LayerIdentityTokenProviderInterface
{
    /**
     * Sets Provider ID.
     *
     * @param string $providerID Token
     */
    public function setProviderID($providerID);

    /**
     * Sets Key ID.
     *
     * @param string $keyID Token
     */
    public function setKeyID($keyID);

    /**
     * Sets Private Key.
     *
     * @param string $privateKey Token
     */
    public function setPrivateKey($privateKey);

    /**
     * Generates Layer Identity Token.
     *
     * @param string $user_id your (the Provider) representation of the authenticated user
     * @param string nonce the nonce generated by the Layer
     *
     * @return string identityToken
     */
    public function generateIdentityToken($user_id, $nonce);
}
