<?php // lint >= 7.1

function(): ?int
{
	return 1;
	return 'foo';
	return null;
};

function (): iterable
{
	return [];
	return 'foo';
};

function (): void
{
	return;
};
